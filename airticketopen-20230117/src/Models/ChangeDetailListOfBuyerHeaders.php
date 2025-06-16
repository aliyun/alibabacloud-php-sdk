<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class ChangeDetailListOfBuyerHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var string
     */
    public $xAcsAirticketAccessToken;

    /**
     * @var string
     */
    public $xAcsAirticketLanguage;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'xAcsAirticketAccessToken' => 'x-acs-airticket-access-token',
        'xAcsAirticketLanguage' => 'x-acs-airticket-language',
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

        if (null !== $this->xAcsAirticketAccessToken) {
            $res['x-acs-airticket-access-token'] = $this->xAcsAirticketAccessToken;
        }

        if (null !== $this->xAcsAirticketLanguage) {
            $res['x-acs-airticket-language'] = $this->xAcsAirticketLanguage;
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

        if (isset($map['x-acs-airticket-access-token'])) {
            $model->xAcsAirticketAccessToken = $map['x-acs-airticket-access-token'];
        }

        if (isset($map['x-acs-airticket-language'])) {
            $model->xAcsAirticketLanguage = $map['x-acs-airticket-language'];
        }

        return $model;
    }
}
