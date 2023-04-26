<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RestoreMediaRequest extends Model
{
    /**
     * @example 8bc8e94fe4e55abde85718****,eb186180e989dd56****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @example 2
     *
     * @var string
     */
    public $restoreDays;

    /**
     * @example Standard
     *
     * @var string
     */
    public $restoreTier;

    /**
     * @example All
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'mediaIds'    => 'MediaIds',
        'restoreDays' => 'RestoreDays',
        'restoreTier' => 'RestoreTier',
        'scope'       => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->restoreDays) {
            $res['RestoreDays'] = $this->restoreDays;
        }
        if (null !== $this->restoreTier) {
            $res['RestoreTier'] = $this->restoreTier;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['RestoreDays'])) {
            $model->restoreDays = $map['RestoreDays'];
        }
        if (isset($map['RestoreTier'])) {
            $model->restoreTier = $map['RestoreTier'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
