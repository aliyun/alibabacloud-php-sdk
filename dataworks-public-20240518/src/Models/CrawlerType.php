<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CrawlerType\supportedEntityTypes;

class CrawlerType extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var supportedEntityTypes[]
     */
    public $supportedEntityTypes;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'displayName' => 'DisplayName',
        'supportedEntityTypes' => 'SupportedEntityTypes',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->supportedEntityTypes)) {
            Model::validateArray($this->supportedEntityTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->supportedEntityTypes) {
            if (\is_array($this->supportedEntityTypes)) {
                $res['SupportedEntityTypes'] = [];
                $n1 = 0;
                foreach ($this->supportedEntityTypes as $item1) {
                    $res['SupportedEntityTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['SupportedEntityTypes'])) {
            if (!empty($map['SupportedEntityTypes'])) {
                $model->supportedEntityTypes = [];
                $n1 = 0;
                foreach ($map['SupportedEntityTypes'] as $item1) {
                    $model->supportedEntityTypes[$n1++] = supportedEntityTypes::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
