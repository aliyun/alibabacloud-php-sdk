<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsCommonResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20000000
     *
     * @var int
     */
    public $code;

    /**
     * @example 63bb629d-92bf-4cdc-ad0b-3032c926****
     *
     * @var string
     */
    public $id;

    /**
     * @example -
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @example http://idrs-daily.oss-cn-beijing.aliyuncs.com/mode/android/model.zip?Expires=1607004612&OSSAccessKeyId=LTAI4FcsdDhFc7h78gqB****&Signature=XXXXX
     *
     * @var string
     */
    public $publicUrl;

    /**
     * @example 368cfa55-2364-4d79-aeb4-c0956c4a****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code'      => 'Code',
        'id'        => 'Id',
        'message'   => 'Message',
        'name'      => 'Name',
        'publicUrl' => 'PublicUrl',
        'taskId'    => 'TaskId',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
