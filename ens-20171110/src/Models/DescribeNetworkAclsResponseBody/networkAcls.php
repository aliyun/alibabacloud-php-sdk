<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls\egressAclEntries;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls\ingressAclEntries;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls\resources;
use AlibabaCloud\Tea\Model;

class networkAcls extends Model
{
    /**
     * @description The time when the network ACL was created. The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2019-11-01T06:08:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the network ACL.
     *
     * @example This is my NetworkAcl.
     *
     * @var string
     */
    public $description;

    /**
     * @description Details of the outbound rules.
     *
     * @var egressAclEntries[]
     */
    public $egressAclEntries;

    /**
     * @description Details of the inbound rules.
     *
     * @var ingressAclEntries[]
     */
    public $ingressAclEntries;

    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-a2do9e413e0spxscd****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The name of the network ACL.
     *
     * @example acl-8
     *
     * @var string
     */
    public $networkAclName;

    /**
     * @description Details of the associated resources.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @description The status of the network ACL. Valid values:
     *
     *   **Available**: The network ACL is available.
     *   **Modifying**: The network ACL is being configured.
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'egressAclEntries' => 'EgressAclEntries',
        'ingressAclEntries' => 'IngressAclEntries',
        'networkAclId' => 'NetworkAclId',
        'networkAclName' => 'NetworkAclName',
        'resources' => 'Resources',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->egressAclEntries) {
            $res['EgressAclEntries'] = [];
            if (null !== $this->egressAclEntries && \is_array($this->egressAclEntries)) {
                $n = 0;
                foreach ($this->egressAclEntries as $item) {
                    $res['EgressAclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ingressAclEntries) {
            $res['IngressAclEntries'] = [];
            if (null !== $this->ingressAclEntries && \is_array($this->ingressAclEntries)) {
                $n = 0;
                foreach ($this->ingressAclEntries as $item) {
                    $res['IngressAclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->networkAclName) {
            $res['NetworkAclName'] = $this->networkAclName;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAcls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EgressAclEntries'])) {
            if (!empty($map['EgressAclEntries'])) {
                $model->egressAclEntries = [];
                $n = 0;
                foreach ($map['EgressAclEntries'] as $item) {
                    $model->egressAclEntries[$n++] = null !== $item ? egressAclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IngressAclEntries'])) {
            if (!empty($map['IngressAclEntries'])) {
                $model->ingressAclEntries = [];
                $n = 0;
                foreach ($map['IngressAclEntries'] as $item) {
                    $model->ingressAclEntries[$n++] = null !== $item ? ingressAclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['NetworkAclName'])) {
            $model->networkAclName = $map['NetworkAclName'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
