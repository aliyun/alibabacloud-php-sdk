<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainInformationResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeInfos extends Model
{
    /**
     * @var int
     */
    public $blockHeight;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var bool
     */
    public $status;

    /**
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
