<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class TBAccountInfoQueryHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var string
     */
    public $xAcsBtripCorpToken;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'xAcsBtripCorpToken' => 'x-acs-btrip-corp-token',
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

        if (null !== $this->xAcsBtripCorpToken) {
            $res['x-acs-btrip-corp-token'] = $this->xAcsBtripCorpToken;
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

        if (isset($map['x-acs-btrip-corp-token'])) {
            $model->xAcsBtripCorpToken = $map['x-acs-btrip-corp-token'];
        }

        return $model;
    }
}
