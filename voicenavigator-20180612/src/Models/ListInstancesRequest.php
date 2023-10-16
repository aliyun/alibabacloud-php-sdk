<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceIdListJsonString;

    /**
     * @var string
     */
    public $name;

    /**
     * @example [Managed]
     *
     * @var string
     */
    public $nluServiceTypeListJsonString;

    /**
     * @var string
     */
    public $number;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unionInstanceId;

    /**
     * @var string
     */
    public $unionSource;
    protected $_name = [
        'instanceIdListJsonString'     => 'InstanceIdListJsonString',
        'name'                         => 'Name',
        'nluServiceTypeListJsonString' => 'NluServiceTypeListJsonString',
        'number'                       => 'Number',
        'pageNumber'                   => 'PageNumber',
        'pageSize'                     => 'PageSize',
        'status'                       => 'Status',
        'unionInstanceId'              => 'UnionInstanceId',
        'unionSource'                  => 'UnionSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdListJsonString) {
            $res['InstanceIdListJsonString'] = $this->instanceIdListJsonString;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nluServiceTypeListJsonString) {
            $res['NluServiceTypeListJsonString'] = $this->nluServiceTypeListJsonString;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->unionInstanceId) {
            $res['UnionInstanceId'] = $this->unionInstanceId;
        }
        if (null !== $this->unionSource) {
            $res['UnionSource'] = $this->unionSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdListJsonString'])) {
            $model->instanceIdListJsonString = $map['InstanceIdListJsonString'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NluServiceTypeListJsonString'])) {
            $model->nluServiceTypeListJsonString = $map['NluServiceTypeListJsonString'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UnionInstanceId'])) {
            $model->unionInstanceId = $map['UnionInstanceId'];
        }
        if (isset($map['UnionSource'])) {
            $model->unionSource = $map['UnionSource'];
        }

        return $model;
    }
}
