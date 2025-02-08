<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $i18nKey;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'i18nKey'  => 'I18nKey',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->i18nKey) {
            $res['I18nKey'] = $this->i18nKey;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['I18nKey'])) {
            $model->i18nKey = $map['I18nKey'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
