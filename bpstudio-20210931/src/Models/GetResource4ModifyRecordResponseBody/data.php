<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResource4ModifyRecordResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {\\"InstanceId\\": \\"\\", \\"AttributeName\\": \\"drmCommand\\", \\"Id\\": 16800, \\"Desc\\": \\"test\\"}
     *
     * @var string
     */
    public $attribute;

    /**
     * @var string
     */
    public $error;

    /**
     * @example 1726645341000
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example rm-uf6308dyal1*****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example Finish
     *
     * @var string
     */
    public $status;

    /**
     * @example rds
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'attribute' => 'Attribute',
        'error' => 'Error',
        'modifyTime' => 'ModifyTime',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = $this->attribute;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attribute'])) {
            $model->attribute = $map['Attribute'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
