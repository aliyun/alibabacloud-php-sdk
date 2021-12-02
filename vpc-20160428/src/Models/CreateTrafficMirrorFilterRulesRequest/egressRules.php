<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateTrafficMirrorFilterRulesRequest;

use AlibabaCloud\Tea\Model;

class egressRules extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $destinationPortRange;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $sourceCidrBlock;

    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'action'               => 'Action',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'destinationPortRange' => 'DestinationPortRange',
        'priority'             => 'Priority',
        'protocol'             => 'Protocol',
        'sourceCidrBlock'      => 'SourceCidrBlock',
        'sourcePortRange'      => 'SourcePortRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->destinationPortRange) {
            $res['DestinationPortRange'] = $this->destinationPortRange;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->sourceCidrBlock) {
            $res['SourceCidrBlock'] = $this->sourceCidrBlock;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['DestinationPortRange'])) {
            $model->destinationPortRange = $map['DestinationPortRange'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['SourceCidrBlock'])) {
            $model->sourceCidrBlock = $map['SourceCidrBlock'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
