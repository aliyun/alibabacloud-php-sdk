<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\openAddAndRemoveFavoriteContentRequest\openSourceRawIdPair;

class openAddAndRemoveFavoriteContentRequest extends Model
{
    /**
     * @var string
     */
    public $favoriteCmd;

    /**
     * @var openSourceRawIdPair
     */
    public $openSourceRawIdPair;

    /**
     * @var string
     */
    public $packageType;
    protected $_name = [
        'favoriteCmd' => 'FavoriteCmd',
        'openSourceRawIdPair' => 'OpenSourceRawIdPair',
        'packageType' => 'PackageType',
    ];

    public function validate()
    {
        if (null !== $this->openSourceRawIdPair) {
            $this->openSourceRawIdPair->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->favoriteCmd) {
            $res['FavoriteCmd'] = $this->favoriteCmd;
        }

        if (null !== $this->openSourceRawIdPair) {
            $res['OpenSourceRawIdPair'] = null !== $this->openSourceRawIdPair ? $this->openSourceRawIdPair->toArray($noStream) : $this->openSourceRawIdPair;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
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
        if (isset($map['FavoriteCmd'])) {
            $model->favoriteCmd = $map['FavoriteCmd'];
        }

        if (isset($map['OpenSourceRawIdPair'])) {
            $model->openSourceRawIdPair = openSourceRawIdPair::fromMap($map['OpenSourceRawIdPair']);
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        return $model;
    }
}
