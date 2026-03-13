<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class UploadModuleAdvanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $code;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'code' => 'code',
        'moduleId' => 'moduleId',
        'moduleName' => 'moduleName',
        'namespaceName' => 'namespaceName',
        'urlObject' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->code)) {
            Model::validateArray($this->code);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            if (\is_array($this->code)) {
                $res['code'] = [];
                foreach ($this->code as $key1 => $value1) {
                    $res['code'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
        }

        if (null !== $this->urlObject) {
            $res['url'] = $this->urlObject;
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
        if (isset($map['code'])) {
            if (!empty($map['code'])) {
                $model->code = [];
                foreach ($map['code'] as $key1 => $value1) {
                    $model->code[$key1] = $value1;
                }
            }
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        if (isset($map['url'])) {
            $model->urlObject = $map['url'];
        }

        return $model;
    }
}
