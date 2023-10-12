<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class PortCollection extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $portCollectionDescription;

    /**
     * @var string
     */
    public $portCollectionId;

    /**
     * @var string
     */
    public $portCollectionName;

    /**
     * @var Port[]
     */
    public $portList;
    protected $_name = [
        'gmtCreate'                 => 'GmtCreate',
        'gmtModified'               => 'GmtModified',
        'portCollectionDescription' => 'PortCollectionDescription',
        'portCollectionId'          => 'PortCollectionId',
        'portCollectionName'        => 'PortCollectionName',
        'portList'                  => 'PortList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->portCollectionDescription) {
            $res['PortCollectionDescription'] = $this->portCollectionDescription;
        }
        if (null !== $this->portCollectionId) {
            $res['PortCollectionId'] = $this->portCollectionId;
        }
        if (null !== $this->portCollectionName) {
            $res['PortCollectionName'] = $this->portCollectionName;
        }
        if (null !== $this->portList) {
            $res['PortList'] = [];
            if (null !== $this->portList && \is_array($this->portList)) {
                $n = 0;
                foreach ($this->portList as $item) {
                    $res['PortList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PortCollection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['PortCollectionDescription'])) {
            $model->portCollectionDescription = $map['PortCollectionDescription'];
        }
        if (isset($map['PortCollectionId'])) {
            $model->portCollectionId = $map['PortCollectionId'];
        }
        if (isset($map['PortCollectionName'])) {
            $model->portCollectionName = $map['PortCollectionName'];
        }
        if (isset($map['PortList'])) {
            if (!empty($map['PortList'])) {
                $model->portList = [];
                $n               = 0;
                foreach ($map['PortList'] as $item) {
                    $model->portList[$n++] = null !== $item ? Port::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
