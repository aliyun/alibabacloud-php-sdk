<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ExceedApplySyncHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var string
     */
    public $xAcsBtripSoCorpToken;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'xAcsBtripSoCorpToken' => 'x-acs-btrip-so-corp-token',
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

        if (null !== $this->xAcsBtripSoCorpToken) {
            $res['x-acs-btrip-so-corp-token'] = $this->xAcsBtripSoCorpToken;
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

        if (isset($map['x-acs-btrip-so-corp-token'])) {
            $model->xAcsBtripSoCorpToken = $map['x-acs-btrip-so-corp-token'];
        }

        return $model;
    }
}
