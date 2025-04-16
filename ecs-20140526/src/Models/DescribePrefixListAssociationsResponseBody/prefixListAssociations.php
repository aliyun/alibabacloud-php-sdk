<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsResponseBody\prefixListAssociations\prefixListAssociation;

class prefixListAssociations extends Model
{
    /**
     * @var prefixListAssociation[]
     */
    public $prefixListAssociation;
    protected $_name = [
        'prefixListAssociation' => 'PrefixListAssociation',
    ];

    public function validate()
    {
        if (\is_array($this->prefixListAssociation)) {
            Model::validateArray($this->prefixListAssociation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prefixListAssociation) {
            if (\is_array($this->prefixListAssociation)) {
                $res['PrefixListAssociation'] = [];
                $n1 = 0;
                foreach ($this->prefixListAssociation as $item1) {
                    $res['PrefixListAssociation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrefixListAssociation'])) {
            if (!empty($map['PrefixListAssociation'])) {
                $model->prefixListAssociation = [];
                $n1 = 0;
                foreach ($map['PrefixListAssociation'] as $item1) {
                    $model->prefixListAssociation[$n1++] = prefixListAssociation::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
