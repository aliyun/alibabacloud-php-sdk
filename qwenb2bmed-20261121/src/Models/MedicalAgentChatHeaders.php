<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models;

use AlibabaCloud\Dara\Model;

class MedicalAgentChatHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;

    /**
     * @var string
     */
    public $xDashScopeSSE;

    /**
     * @var string
     */
    public $xGWAccess;

    /**
     * @var string
     */
    public $xGWNonce;

    /**
     * @var string
     */
    public $xGWProtocol;

    /**
     * @var string
     */
    public $xGWSignature;

    /**
     * @var string
     */
    public $xGWTimestamp;

    /**
     * @var string
     */
    public $xRequestId;
    protected $_name = [
        'commonHeaders' => 'commonHeaders',
        'xDashScopeSSE' => 'X-DashScope-SSE',
        'xGWAccess' => 'X-GW-Access',
        'xGWNonce' => 'X-GW-Nonce',
        'xGWProtocol' => 'X-GW-Protocol',
        'xGWSignature' => 'X-GW-Signature',
        'xGWTimestamp' => 'X-GW-Timestamp',
        'xRequestId' => 'X-Request-Id',
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

        if (null !== $this->xDashScopeSSE) {
            $res['X-DashScope-SSE'] = $this->xDashScopeSSE;
        }

        if (null !== $this->xGWAccess) {
            $res['X-GW-Access'] = $this->xGWAccess;
        }

        if (null !== $this->xGWNonce) {
            $res['X-GW-Nonce'] = $this->xGWNonce;
        }

        if (null !== $this->xGWProtocol) {
            $res['X-GW-Protocol'] = $this->xGWProtocol;
        }

        if (null !== $this->xGWSignature) {
            $res['X-GW-Signature'] = $this->xGWSignature;
        }

        if (null !== $this->xGWTimestamp) {
            $res['X-GW-Timestamp'] = $this->xGWTimestamp;
        }

        if (null !== $this->xRequestId) {
            $res['X-Request-Id'] = $this->xRequestId;
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

        if (isset($map['X-DashScope-SSE'])) {
            $model->xDashScopeSSE = $map['X-DashScope-SSE'];
        }

        if (isset($map['X-GW-Access'])) {
            $model->xGWAccess = $map['X-GW-Access'];
        }

        if (isset($map['X-GW-Nonce'])) {
            $model->xGWNonce = $map['X-GW-Nonce'];
        }

        if (isset($map['X-GW-Protocol'])) {
            $model->xGWProtocol = $map['X-GW-Protocol'];
        }

        if (isset($map['X-GW-Signature'])) {
            $model->xGWSignature = $map['X-GW-Signature'];
        }

        if (isset($map['X-GW-Timestamp'])) {
            $model->xGWTimestamp = $map['X-GW-Timestamp'];
        }

        if (isset($map['X-Request-Id'])) {
            $model->xRequestId = $map['X-Request-Id'];
        }

        return $model;
    }
}
