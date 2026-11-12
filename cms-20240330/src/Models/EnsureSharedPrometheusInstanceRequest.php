<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class EnsureSharedPrometheusInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $shareScope;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'aliyunLang' => 'aliyunLang',
        'shareScope' => 'shareScope',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['aliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->shareScope) {
            $res['shareScope'] = $this->shareScope;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['aliyunLang'])) {
            $model->aliyunLang = $map['aliyunLang'];
        }

        if (isset($map['shareScope'])) {
            $model->shareScope = $map['shareScope'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
