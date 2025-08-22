<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class GetResourceTypeRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $filterReadOnly;

    /**
     * @var string
     */
    public $terraformProviderVersion;
    protected $_name = [
        'acceptLanguage' => 'acceptLanguage',
        'filterReadOnly' => 'filterReadOnly',
        'terraformProviderVersion' => 'terraformProviderVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['acceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->filterReadOnly) {
            $res['filterReadOnly'] = $this->filterReadOnly;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
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
        if (isset($map['acceptLanguage'])) {
            $model->acceptLanguage = $map['acceptLanguage'];
        }

        if (isset($map['filterReadOnly'])) {
            $model->filterReadOnly = $map['filterReadOnly'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        return $model;
    }
}
