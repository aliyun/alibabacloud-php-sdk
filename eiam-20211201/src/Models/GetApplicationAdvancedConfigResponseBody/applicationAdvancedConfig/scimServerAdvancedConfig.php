<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationAdvancedConfigResponseBody\applicationAdvancedConfig;

use AlibabaCloud\Dara\Model;

class scimServerAdvancedConfig extends Model
{
    /**
     * @var string[]
     */
    public $supportedUserCustomFieldIds;

    /**
     * @var string
     */
    public $userCustomFieldNamespace;
    protected $_name = [
        'supportedUserCustomFieldIds' => 'SupportedUserCustomFieldIds',
        'userCustomFieldNamespace' => 'UserCustomFieldNamespace',
    ];

    public function validate()
    {
        if (\is_array($this->supportedUserCustomFieldIds)) {
            Model::validateArray($this->supportedUserCustomFieldIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedUserCustomFieldIds) {
            if (\is_array($this->supportedUserCustomFieldIds)) {
                $res['SupportedUserCustomFieldIds'] = [];
                $n1 = 0;
                foreach ($this->supportedUserCustomFieldIds as $item1) {
                    $res['SupportedUserCustomFieldIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userCustomFieldNamespace) {
            $res['UserCustomFieldNamespace'] = $this->userCustomFieldNamespace;
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
        if (isset($map['SupportedUserCustomFieldIds'])) {
            if (!empty($map['SupportedUserCustomFieldIds'])) {
                $model->supportedUserCustomFieldIds = [];
                $n1 = 0;
                foreach ($map['SupportedUserCustomFieldIds'] as $item1) {
                    $model->supportedUserCustomFieldIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserCustomFieldNamespace'])) {
            $model->userCustomFieldNamespace = $map['UserCustomFieldNamespace'];
        }

        return $model;
    }
}
