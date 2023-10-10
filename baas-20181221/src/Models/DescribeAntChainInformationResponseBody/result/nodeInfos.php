<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeInfos extends Model
{
    /**
     * @example 365216
     *
     * @var int
     */
    public $blockHeight;

    /**
     * @example 121.199.195.8 18130
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example true
     *
     * @var bool
     */
    public $status;

    /**
     * @example 0.10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'blockHeight' => 'BlockHeight',
        'nodeName'    => 'NodeName',
        'status'      => 'Status',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockHeight) {
            $res['BlockHeight'] = $this->blockHeight;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockHeight'])) {
            $model->blockHeight = $map['BlockHeight'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
