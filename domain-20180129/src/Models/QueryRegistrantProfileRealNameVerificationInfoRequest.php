<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryRegistrantProfileRealNameVerificationInfoRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $fetchImage;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1234567
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'fetchImage'          => 'FetchImage',
        'lang'                => 'Lang',
        'registrantProfileId' => 'RegistrantProfileId',
        'userClientIp'        => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fetchImage) {
            $res['FetchImage'] = $this->fetchImage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRegistrantProfileRealNameVerificationInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FetchImage'])) {
            $model->fetchImage = $map['FetchImage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
