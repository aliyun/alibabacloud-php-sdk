<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonReleasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonReleasesResponseBody\data\releases;

class data extends Model
{
    /**
     * @var releases[]
     */
    public $releases;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'releases' => 'Releases',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->releases)) {
            Model::validateArray($this->releases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->releases) {
            if (\is_array($this->releases)) {
                $res['Releases'] = [];
                $n1 = 0;
                foreach ($this->releases as $item1) {
                    $res['Releases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Releases'])) {
            if (!empty($map['Releases'])) {
                $model->releases = [];
                $n1 = 0;
                foreach ($map['Releases'] as $item1) {
                    $model->releases[$n1] = releases::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
