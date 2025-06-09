<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardResponseBody;

use AlibabaCloud\Dara\Model;

class dashboardItems extends Model
{
    /**
     * @var string
     */
    public $dashboardName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'dashboardName' => 'dashboardName',
        'description' => 'description',
        'displayName' => 'displayName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardName) {
            $res['dashboardName'] = $this->dashboardName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
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
        if (isset($map['dashboardName'])) {
            $model->dashboardName = $map['dashboardName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        return $model;
    }
}
