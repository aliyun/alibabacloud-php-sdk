<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopsPolicyGroupResponseBody;

use AlibabaCloud\Tea\Model;

class modifyResults extends Model
{
    /**
     * @description The result of the modification. A value of success indicates that the policy is modified. If the policy failed to be modified, an error message is returned.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The error message returned if the request failed. This parameter is not returned if the value of Code is success.``
     *
     * @example The specified param DesktopId ecd-ia2zw38bi6cm7**** is not found.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'      => 'Code',
        'desktopId' => 'DesktopId',
        'message'   => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modifyResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
