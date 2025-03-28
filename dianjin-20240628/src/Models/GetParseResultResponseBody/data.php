<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $result;

    /**
     * @var string
     */
    public $resultUrl;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'fileType' => 'fileType',
        'providerType' => 'providerType',
        'requestId' => 'requestId',
        'result' => 'result',
        'resultUrl' => 'resultUrl',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        if (null !== $this->providerType) {
            $res['providerType'] = $this->providerType;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['result'] = [];
                foreach ($this->result as $key1 => $value1) {
                    $res['result'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resultUrl) {
            $res['resultUrl'] = $this->resultUrl;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        if (isset($map['providerType'])) {
            $model->providerType = $map['providerType'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = [];
                foreach ($map['result'] as $key1 => $value1) {
                    $model->result[$key1] = $value1;
                }
            }
        }

        if (isset($map['resultUrl'])) {
            $model->resultUrl = $map['resultUrl'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
