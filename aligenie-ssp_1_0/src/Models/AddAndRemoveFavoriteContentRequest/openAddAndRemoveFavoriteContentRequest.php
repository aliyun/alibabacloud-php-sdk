<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddAndRemoveFavoriteContentRequest\openAddAndRemoveFavoriteContentRequest\openSourceRawIdPair;
use AlibabaCloud\Tea\Model;

class openAddAndRemoveFavoriteContentRequest extends Model
{
    /**
     * @example ADD
     *
     * @var string
     */
    public $favoriteCmd;

    /**
     * @var openSourceRawIdPair
     */
    public $openSourceRawIdPair;

    /**
     * @example CONTENT
     *
     * @var string
     */
    public $packageType;
    protected $_name = [
        'favoriteCmd'         => 'FavoriteCmd',
        'openSourceRawIdPair' => 'OpenSourceRawIdPair',
        'packageType'         => 'PackageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->favoriteCmd) {
            $res['FavoriteCmd'] = $this->favoriteCmd;
        }
        if (null !== $this->openSourceRawIdPair) {
            $res['OpenSourceRawIdPair'] = null !== $this->openSourceRawIdPair ? $this->openSourceRawIdPair->toMap() : null;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openAddAndRemoveFavoriteContentRequest
     */
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
