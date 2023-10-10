<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UnbindK8sSlbRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 5a166fbd-****-****-a286-781659d9f54c
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the cluster. You can call the GetK8sCluster operation to query the cluster ID. For more information, see [GetK8sCluster](~~181437~~).
     *
     * @example 712082c3-****-****-9217-a947b5cde6ee
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the SLB instance.
     *
     * @example a2d4ab12666544a479cdd0711a97****
     *
     * @var string
     */
    public $slbName;

    /**
     * @description The type of the SLB instance. Valid values:
     *
     *   **internet**: Internet-facing SLB instance
     *   **intranet**: internal-facing SLB instance
     *
     * @example internet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'     => 'AppId',
        'clusterId' => 'ClusterId',
        'slbName'   => 'SlbName',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindK8sSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
