<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class JWTAuthConfig extends Model
{
    /**
     * @example /userInfo/*
     *
     * @var string
     */
    public $blackList;

    /**
     * @example header:userID:userIDToFunction
     *
     * @var string[]
     */
    public $claimPassBy;

    /**
     * @var string
     */
    public $jwks;

    /**
     * @var string[]
     */
    public $tokenLookup;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'blackList'   => 'blackList',
        'claimPassBy' => 'claimPassBy',
        'jwks'        => 'jwks',
        'tokenLookup' => 'tokenLookup',
        'whiteList'   => 'whiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackList) {
            $res['blackList'] = $this->blackList;
        }
        if (null !== $this->claimPassBy) {
            $res['claimPassBy'] = $this->claimPassBy;
        }
        if (null !== $this->jwks) {
            $res['jwks'] = $this->jwks;
        }
        if (null !== $this->tokenLookup) {
            $res['tokenLookup'] = $this->tokenLookup;
        }
        if (null !== $this->whiteList) {
            $res['whiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JWTAuthConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['blackList'])) {
            $model->blackList = $map['blackList'];
        }
        if (isset($map['claimPassBy'])) {
            if (!empty($map['claimPassBy'])) {
                $model->claimPassBy = $map['claimPassBy'];
            }
        }
        if (isset($map['jwks'])) {
            $model->jwks = $map['jwks'];
        }
        if (isset($map['tokenLookup'])) {
            if (!empty($map['tokenLookup'])) {
                $model->tokenLookup = $map['tokenLookup'];
            }
        }
        if (isset($map['whiteList'])) {
            if (!empty($map['whiteList'])) {
                $model->whiteList = $map['whiteList'];
            }
        }

        return $model;
    }
}
