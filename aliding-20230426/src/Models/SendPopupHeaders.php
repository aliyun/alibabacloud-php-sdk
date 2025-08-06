<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendPopupHeaders\accountContext;

class SendPopupHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var accountContext
     */
    public $accountContext;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'accountContext' => 'AccountContext',
    ];

    public function validate()
    {
        if (\is_array($this->commonHeaders)) {
            Model::validateArray($this->commonHeaders);
        }
        if (null !== $this->accountContext) {
            $this->accountContext->validate();
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

        if (null !== $this->accountContext) {
            $res['AccountContext'] = null !== $this->accountContext ? $this->accountContext->toArray($noStream) : $this->accountContext;
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

        if (isset($map['AccountContext'])) {
            $model->accountContext = accountContext::fromMap($map['AccountContext']);
        }

        return $model;
    }
}
