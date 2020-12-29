<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainInformationResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeInfos extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $blockHeight;
    protected $_name = [
        'status'      => 'Status',
        'nodeName'    => 'NodeName',
        'version'     => 'Version',
        'blockHeight' => 'BlockHeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->blockHeight) {
            $res['BlockHeight'] = $this->blockHeight;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['BlockHeight'])) {
            $model->blockHeight = $map['BlockHeight'];
        }

        return $model;
    }
}
