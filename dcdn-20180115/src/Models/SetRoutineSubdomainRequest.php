<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class SetRoutineSubdomainRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $subdomains;
    protected $_name = [
        'subdomains' => 'Subdomains',
    ];

    public function validate()
    {
        if (\is_array($this->subdomains)) {
            Model::validateArray($this->subdomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subdomains) {
            if (\is_array($this->subdomains)) {
                $res['Subdomains'] = [];
                foreach ($this->subdomains as $key1 => $value1) {
                    $res['Subdomains'][$key1] = $value1;
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
        if (isset($map['Subdomains'])) {
            if (!empty($map['Subdomains'])) {
                $model->subdomains = [];
                foreach ($map['Subdomains'] as $key1 => $value1) {
                    $model->subdomains[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
