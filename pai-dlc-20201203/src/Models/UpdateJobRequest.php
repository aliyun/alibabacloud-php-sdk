<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class UpdateJobRequest extends Model
{
    /**
     * @description The job visibility. Valid values:
     *
     *   PUBLIC: The job is visible to all members in the workspace.
     *   PRIVATE: The job is visible only to you and the administrator of the workspace.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description The job priority. Valid values: 1 to 9.
     *
     *   1: the lowest priority.
     *   9: the highest priority.
     *
     * @example 5
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'priority' => 'Priority',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
