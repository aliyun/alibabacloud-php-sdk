<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

class DataValue extends Model
{
    /**
     * @var int
     */
    public $docId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $uploadTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $applyId;
    protected $_name = [
        'docId'      => 'docId',
        'name'       => 'name',
        'fileName'   => 'fileName',
        'url'        => 'url',
        'uploadTime' => 'uploadTime',
        'orderId'    => 'orderId',
        'applyId'    => 'applyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->uploadTime) {
            $res['uploadTime'] = $this->uploadTime;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->applyId) {
            $res['applyId'] = $this->applyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }
        if (isset($map['uploadTime'])) {
            $model->uploadTime = $map['uploadTime'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['applyId'])) {
            $model->applyId = $map['applyId'];
        }

        return $model;
    }
}
