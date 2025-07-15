<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList\associatedInstanceList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList\queueList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList\tags;
use AlibabaCloud\Tea\Model;

class qosList extends Model
{
    /**
     * @description The information about the instances to which the QoS policy is associated.
     *
     * @var associatedInstanceList[]
     */
    public $associatedInstanceList;

    /**
     * @description The configuration progress of the QoS policy. Valid values: **0** to **100**.
     *
     * @example 100
     *
     * @var int
     */
    public $progressing;

    /**
     * @description The description of the QoS policy.
     *
     * The description can be up to 256 characters in length. It cannot start with `http://` or `https://`.
     *
     * @example qos-test
     *
     * @var string
     */
    public $qosDescription;

    /**
     * @description The ID of the QoS policy.
     *
     * @example qos-pksbqfmotl5hzq****
     *
     * @var string
     */
    public $qosId;

    /**
     * @description The name of the QoS policy.
     *
     * The name can be up to 128 characters in length and cannot start with `http://` or `https://`.
     *
     * @example qos-test
     *
     * @var string
     */
    public $qosName;

    /**
     * @description The information about the QoS queues.
     *
     * @var queueList[]
     */
    public $queueList;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmz7vtyl4f***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The state of the QoS policy. Valid values:
     *
     * - **Normal**: The QoS policy is available.
     * - **Configuring**: The QoS policy is being configured.
     *
     * > If a QoS policy is in the Configuring state, you cannot perform most of the operations to create, update, or delete QoS policies, QoS queues, or QoS rules.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'associatedInstanceList' => 'AssociatedInstanceList',
        'progressing' => 'Progressing',
        'qosDescription' => 'QosDescription',
        'qosId' => 'QosId',
        'qosName' => 'QosName',
        'queueList' => 'QueueList',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedInstanceList) {
            $res['AssociatedInstanceList'] = [];
            if (null !== $this->associatedInstanceList && \is_array($this->associatedInstanceList)) {
                $n = 0;
                foreach ($this->associatedInstanceList as $item) {
                    $res['AssociatedInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->progressing) {
            $res['Progressing'] = $this->progressing;
        }
        if (null !== $this->qosDescription) {
            $res['QosDescription'] = $this->qosDescription;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->qosName) {
            $res['QosName'] = $this->qosName;
        }
        if (null !== $this->queueList) {
            $res['QueueList'] = [];
            if (null !== $this->queueList && \is_array($this->queueList)) {
                $n = 0;
                foreach ($this->queueList as $item) {
                    $res['QueueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedInstanceList'])) {
            if (!empty($map['AssociatedInstanceList'])) {
                $model->associatedInstanceList = [];
                $n = 0;
                foreach ($map['AssociatedInstanceList'] as $item) {
                    $model->associatedInstanceList[$n++] = null !== $item ? associatedInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Progressing'])) {
            $model->progressing = $map['Progressing'];
        }
        if (isset($map['QosDescription'])) {
            $model->qosDescription = $map['QosDescription'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['QosName'])) {
            $model->qosName = $map['QosName'];
        }
        if (isset($map['QueueList'])) {
            if (!empty($map['QueueList'])) {
                $model->queueList = [];
                $n = 0;
                foreach ($map['QueueList'] as $item) {
                    $model->queueList[$n++] = null !== $item ? queueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
