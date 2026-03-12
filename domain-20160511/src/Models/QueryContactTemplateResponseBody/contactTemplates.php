<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models\QueryContactTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryContactTemplateResponseBody\contactTemplates\contactTemplate;

class contactTemplates extends Model
{
    /**
     * @var contactTemplate[]
     */
    public $contactTemplate;
    protected $_name = [
        'contactTemplate' => 'ContactTemplate',
    ];

    public function validate()
    {
        if (\is_array($this->contactTemplate)) {
            Model::validateArray($this->contactTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactTemplate) {
            if (\is_array($this->contactTemplate)) {
                $res['ContactTemplate'] = [];
                $n1 = 0;
                foreach ($this->contactTemplate as $item1) {
                    $res['ContactTemplate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ContactTemplate'])) {
            if (!empty($map['ContactTemplate'])) {
                $model->contactTemplate = [];
                $n1 = 0;
                foreach ($map['ContactTemplate'] as $item1) {
                    $model->contactTemplate[$n1] = contactTemplate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
