<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UnbindPersonRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var int
     */
    public $profileId;
    protected $_name = [
        'corpId'    => 'CorpId',
        'isvSubId'  => 'IsvSubId',
        'profileId' => 'ProfileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->profileId) {
            $res['ProfileId'] = $this->profileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindPersonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['ProfileId'])) {
            $model->profileId = $map['ProfileId'];
        }

        return $model;
    }
}
