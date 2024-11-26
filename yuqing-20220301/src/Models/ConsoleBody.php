<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ConsoleBody extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $interfaceName;

    /**
     * @var string
     */
    public $paramJson;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $teamHashId;
    protected $_name = [
        'appCode'       => 'appCode',
        'interfaceName' => 'interfaceName',
        'paramJson'     => 'paramJson',
        'requestId'     => 'requestId',
        'teamHashId'    => 'teamHashId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['appCode'] = $this->appCode;
        }
        if (null !== $this->interfaceName) {
            $res['interfaceName'] = $this->interfaceName;
        }
        if (null !== $this->paramJson) {
            $res['paramJson'] = $this->paramJson;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->teamHashId) {
            $res['teamHashId'] = $this->teamHashId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConsoleBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appCode'])) {
            $model->appCode = $map['appCode'];
        }
        if (isset($map['interfaceName'])) {
            $model->interfaceName = $map['interfaceName'];
        }
        if (isset($map['paramJson'])) {
            $model->paramJson = $map['paramJson'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['teamHashId'])) {
            $model->teamHashId = $map['teamHashId'];
        }

        return $model;
    }
}
