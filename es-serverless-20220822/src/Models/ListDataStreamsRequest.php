<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models;

use AlibabaCloud\Tea\Model;

class ListDataStreamsRequest extends Model
{
    /**
     * @var string
     */
    public $dataStreamName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dataStreamName' => 'dataStreamName',
        'pageNumber'     => 'pageNumber',
        'pageSize'       => 'pageSize',
        'regionId'       => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataStreamName) {
            $res['dataStreamName'] = $this->dataStreamName;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataStreamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataStreamName'])) {
            $model->dataStreamName = $map['dataStreamName'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
