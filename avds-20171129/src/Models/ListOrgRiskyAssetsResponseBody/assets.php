<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\ListOrgRiskyAssetsResponseBody;

use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $asset;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'type'  => 'Type',
        'asset' => 'Asset',
        'count' => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->asset) {
            $res['Asset'] = $this->asset;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Asset'])) {
            $model->asset = $map['Asset'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
