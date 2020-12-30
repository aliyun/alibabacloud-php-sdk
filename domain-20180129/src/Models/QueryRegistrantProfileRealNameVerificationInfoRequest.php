<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryRegistrantProfileRealNameVerificationInfoRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var bool
     */
    public $fetchImage;
    protected $_name = [
        'userClientIp'        => 'UserClientIp',
        'lang'                => 'Lang',
        'registrantProfileId' => 'RegistrantProfileId',
        'fetchImage'          => 'FetchImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->fetchImage) {
            $res['FetchImage'] = $this->fetchImage;
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
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['FetchImage'])) {
            $model->fetchImage = $map['FetchImage'];
        }

        return $model;
    }
}
