<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\imageRiskList;

use AlibabaCloud\Dara\Model;

class endPointList extends Model
{
    /**
     * @var string[]
     */
    public $domains;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'domains' => 'Domains',
        'type'    => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1             = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1             = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
