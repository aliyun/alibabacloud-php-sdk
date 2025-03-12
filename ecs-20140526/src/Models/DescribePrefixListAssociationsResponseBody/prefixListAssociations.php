<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAssociationsResponseBody\prefixListAssociations\prefixListAssociation;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefixListAssociation) {
            $res['PrefixListAssociation'] = [];
            if (null !== $this->prefixListAssociation && \is_array($this->prefixListAssociation)) {
                $n = 0;
                foreach ($this->prefixListAssociation as $item) {
                    $res['PrefixListAssociation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prefixListAssociations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrefixListAssociation'])) {
            if (!empty($map['PrefixListAssociation'])) {
                $model->prefixListAssociation = [];
                $n                            = 0;
                foreach ($map['PrefixListAssociation'] as $item) {
                    $model->prefixListAssociation[$n++] = null !== $item ? prefixListAssociation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
