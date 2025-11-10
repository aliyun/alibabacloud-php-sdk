<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponseBody\logInfo;

use AlibabaCloud\Dara\Model;

class callerInfo extends Model
{
    /**
     * @var string
     */
    public $callerAccountId;

    /**
     * @var string
     */
    public $callerIp;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var string
     */
    public $masterAccountId;

    /**
     * @var string
     */
    public $userAgent;
    protected $_name = [
        'callerAccountId' => 'callerAccountId',
        'callerIp' => 'callerIp',
        'callerType' => 'callerType',
        'masterAccountId' => 'masterAccountId',
        'userAgent' => 'userAgent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callerAccountId) {
            $res['callerAccountId'] = $this->callerAccountId;
        }

        if (null !== $this->callerIp) {
            $res['callerIp'] = $this->callerIp;
        }

        if (null !== $this->callerType) {
            $res['callerType'] = $this->callerType;
        }

        if (null !== $this->masterAccountId) {
            $res['masterAccountId'] = $this->masterAccountId;
        }

        if (null !== $this->userAgent) {
            $res['userAgent'] = $this->userAgent;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['callerAccountId'])) {
            $model->callerAccountId = $map['callerAccountId'];
        }

        if (isset($map['callerIp'])) {
            $model->callerIp = $map['callerIp'];
        }

        if (isset($map['callerType'])) {
            $model->callerType = $map['callerType'];
        }

        if (isset($map['masterAccountId'])) {
            $model->masterAccountId = $map['masterAccountId'];
        }

        if (isset($map['userAgent'])) {
            $model->userAgent = $map['userAgent'];
        }

        return $model;
    }
}
