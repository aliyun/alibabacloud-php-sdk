<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class ValidateModuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $codeMap;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePath;
    protected $_name = [
        'clientToken' => 'clientToken',
        'code' => 'code',
        'codeMap' => 'codeMap',
        'source' => 'source',
        'sourcePath' => 'sourcePath',
    ];

    public function validate()
    {
        if (\is_array($this->codeMap)) {
            Model::validateArray($this->codeMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->codeMap) {
            if (\is_array($this->codeMap)) {
                $res['codeMap'] = [];
                foreach ($this->codeMap as $key1 => $value1) {
                    $res['codeMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['codeMap'])) {
            if (!empty($map['codeMap'])) {
                $model->codeMap = [];
                foreach ($map['codeMap'] as $key1 => $value1) {
                    $model->codeMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }

        return $model;
    }
}
