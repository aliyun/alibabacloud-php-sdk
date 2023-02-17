<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLoggingRequest\loggingDetails;
use AlibabaCloud\Tea\Model;

class UpdateLoggingRequest extends Model
{
    /**
     * @var loggingDetails[]
     */
    public $loggingDetails;

    /**
     * @example my-project
     *
     * @var string
     */
    public $loggingProject;
    protected $_name = [
        'loggingDetails' => 'loggingDetails',
        'loggingProject' => 'loggingProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loggingDetails) {
            $res['loggingDetails'] = [];
            if (null !== $this->loggingDetails && \is_array($this->loggingDetails)) {
                $n = 0;
                foreach ($this->loggingDetails as $item) {
                    $res['loggingDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loggingProject) {
            $res['loggingProject'] = $this->loggingProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLoggingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['loggingDetails'])) {
            if (!empty($map['loggingDetails'])) {
                $model->loggingDetails = [];
                $n                     = 0;
                foreach ($map['loggingDetails'] as $item) {
                    $model->loggingDetails[$n++] = null !== $item ? loggingDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['loggingProject'])) {
            $model->loggingProject = $map['loggingProject'];
        }

        return $model;
    }
}
