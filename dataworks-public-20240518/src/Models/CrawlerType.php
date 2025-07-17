<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CrawlerType\supportedEntityTypes;
use AlibabaCloud\Tea\Model;

class CrawlerType extends Model
{
    /**
     * @example Data Lake Formation
     *
     * @var string
     */
    public $displayName;

    /**
     * @var supportedEntityTypes[]
     */
    public $supportedEntityTypes;

    /**
     * @example dlf
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'displayName' => 'DisplayName',
        'supportedEntityTypes' => 'SupportedEntityTypes',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->supportedEntityTypes) {
            $res['SupportedEntityTypes'] = [];
            if (null !== $this->supportedEntityTypes && \is_array($this->supportedEntityTypes)) {
                $n = 0;
                foreach ($this->supportedEntityTypes as $item) {
                    $res['SupportedEntityTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CrawlerType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['SupportedEntityTypes'])) {
            if (!empty($map['SupportedEntityTypes'])) {
                $model->supportedEntityTypes = [];
                $n = 0;
                foreach ($map['SupportedEntityTypes'] as $item) {
                    $model->supportedEntityTypes[$n++] = null !== $item ? supportedEntityTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
