<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class deleteAppInstanceModels extends Model
{
    /**
     * @example ai-gbuea*****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example InvalidParameter.ProductType
     *
     * @var string
     */
    public $code;

    /**
     * @example The parameter ProductType is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'appInstanceId' => 'AppInstanceId',
        'code'          => 'Code',
        'message'       => 'Message',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deleteAppInstanceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
