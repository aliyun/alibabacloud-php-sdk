<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateConditionalAccessPolicyRequest\conditionsConfig;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description Excluded applications
     *
     * @var string[]
     */
    public $excludeApplications;

    /**
     * @description Included applications
     *
     * @var string[]
     */
    public $includeApplications;
    protected $_name = [
        'excludeApplications' => 'ExcludeApplications',
        'includeApplications' => 'IncludeApplications',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeApplications) {
            $res['ExcludeApplications'] = $this->excludeApplications;
        }
        if (null !== $this->includeApplications) {
            $res['IncludeApplications'] = $this->includeApplications;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeApplications'])) {
            if (!empty($map['ExcludeApplications'])) {
                $model->excludeApplications = $map['ExcludeApplications'];
            }
        }
        if (isset($map['IncludeApplications'])) {
            if (!empty($map['IncludeApplications'])) {
                $model->includeApplications = $map['IncludeApplications'];
            }
        }

        return $model;
    }
}
