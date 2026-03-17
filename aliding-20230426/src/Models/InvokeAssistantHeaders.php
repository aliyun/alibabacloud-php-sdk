<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class InvokeAssistantHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $aiLogContextJson;

    /**
     * @var string
     */
    public $alidingSsoTicket;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'accountId' => 'accountId',
        'aiLogContextJson' => 'aiLogContextJson',
        'alidingSsoTicket' => 'alidingSsoTicket',
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

        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->aiLogContextJson) {
            $res['aiLogContextJson'] = $this->aiLogContextJson;
        }

        if (null !== $this->alidingSsoTicket) {
            $res['alidingSsoTicket'] = $this->alidingSsoTicket;
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

        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['aiLogContextJson'])) {
            $model->aiLogContextJson = $map['aiLogContextJson'];
        }

        if (isset($map['alidingSsoTicket'])) {
            $model->alidingSsoTicket = $map['alidingSsoTicket'];
        }

        return $model;
    }
}
