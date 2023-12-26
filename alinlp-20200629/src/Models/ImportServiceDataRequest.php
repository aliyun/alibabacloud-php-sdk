<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class ImportServiceDataRequest extends Model
{
    /**
     * @var string[][]
     */
    public $partition;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceId;

    /**
     * @example directoryName
     *
     * @var string
     */
    public $subPath;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'partition' => 'Partition',
        'serviceId' => 'ServiceId',
        'subPath'   => 'SubPath',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->subPath) {
            $res['SubPath'] = $this->subPath;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportServiceDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Partition'])) {
            if (!empty($map['Partition'])) {
                $model->partition = $map['Partition'];
            }
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['SubPath'])) {
            $model->subPath = $map['SubPath'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
