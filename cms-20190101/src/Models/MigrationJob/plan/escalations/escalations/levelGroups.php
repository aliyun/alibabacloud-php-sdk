<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations\escalations;

use AlibabaCloud\Tea\Model;

class levelGroups extends Model
{
    /**
     * @var string[]
     */
    public $critical;

    /**
     * @var string[]
     */
    public $info;

    /**
     * @var string[]
     */
    public $resolved;

    /**
     * @var string[]
     */
    public $warning;
    protected $_name = [
        'critical' => 'Critical',
        'info'     => 'Info',
        'resolved' => 'Resolved',
        'warning'  => 'Warning',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = $this->critical;
        }
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->resolved) {
            $res['Resolved'] = $this->resolved;
        }
        if (null !== $this->warning) {
            $res['Warning'] = $this->warning;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return levelGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Critical'])) {
            if (!empty($map['Critical'])) {
                $model->critical = $map['Critical'];
            }
        }
        if (isset($map['Info'])) {
            if (!empty($map['Info'])) {
                $model->info = $map['Info'];
            }
        }
        if (isset($map['Resolved'])) {
            if (!empty($map['Resolved'])) {
                $model->resolved = $map['Resolved'];
            }
        }
        if (isset($map['Warning'])) {
            if (!empty($map['Warning'])) {
                $model->warning = $map['Warning'];
            }
        }

        return $model;
    }
}
