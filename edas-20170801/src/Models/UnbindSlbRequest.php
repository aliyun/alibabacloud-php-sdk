<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UnbindSlbRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example c627c157-560d-********************
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to remove the configured listeners. Valid values:
     *
     *   true: removes the configured listeners.
     *   false: does not remove the configured listeners.
     *
     * @example false
     *
     * @var string
     */
    public $deleteListener;

    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-wz9vo49****************
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The network type of the SLB instance. Valid values:
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
        'appId'          => 'AppId',
        'deleteListener' => 'DeleteListener',
        'slbId'          => 'SlbId',
        'type'           => 'Type',
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
        if (null !== $this->deleteListener) {
            $res['DeleteListener'] = $this->deleteListener;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DeleteListener'])) {
            $model->deleteListener = $map['DeleteListener'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
