<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;

class OAuth2RevocationEndpointHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var string
     */
    public $xAcsAligenieAccessToken;

    /**
     * @var string
     */
    public $authorization;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'xAcsAligenieAccessToken' => 'x-acs-aligenie-access-token',
        'authorization' => 'Authorization',
    ];

    public function validate()
    {
        if (\is_array($this->commonHeaders)) {
            Model::validateArray($this->commonHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            if (\is_array($this->commonHeaders)) {
                $res['commonHeaders'] = [];
                foreach ($this->commonHeaders as $key1 => $value1) {
                    $res['commonHeaders'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->xAcsAligenieAccessToken) {
            $res['x-acs-aligenie-access-token'] = $this->xAcsAligenieAccessToken;
        }

        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
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
        if (isset($map['commonHeaders'])) {
            if (!empty($map['commonHeaders'])) {
                $model->commonHeaders = [];
                foreach ($map['commonHeaders'] as $key1 => $value1) {
                    $model->commonHeaders[$key1] = $value1;
                }
            }
        }

        if (isset($map['x-acs-aligenie-access-token'])) {
            $model->xAcsAligenieAccessToken = $map['x-acs-aligenie-access-token'];
        }

        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        return $model;
    }
}
