<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginPoolRequest\origins;

class CreateOriginPoolRequest extends Model
{
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $name;
    /**
     * @var origins[]
     */
    public $origins;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enabled' => 'Enabled',
        'name'    => 'Name',
        'origins' => 'Origins',
        'siteId'  => 'SiteId',
    ];

    public function validate()
    {
        if (\is_array($this->origins)) {
            Model::validateArray($this->origins);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->origins) {
            if (\is_array($this->origins)) {
                $res['Origins'] = [];
                $n1             = 0;
                foreach ($this->origins as $item1) {
                    $res['Origins'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Origins'])) {
            if (!empty($map['Origins'])) {
                $model->origins = [];
                $n1             = 0;
                foreach ($map['Origins'] as $item1) {
                    $model->origins[$n1++] = origins::fromMap($item1);
                }
            }
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
