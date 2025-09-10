<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingRequest\loggingDetails;

class CreateLoggingRequest extends Model
{
    /**
     * @var loggingDetails[]
     */
    public $loggingDetails;

    /**
     * @var string
     */
    public $loggingProject;
    protected $_name = [
        'loggingDetails' => 'loggingDetails',
        'loggingProject' => 'loggingProject',
    ];

    public function validate()
    {
        if (\is_array($this->loggingDetails)) {
            Model::validateArray($this->loggingDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loggingDetails) {
            if (\is_array($this->loggingDetails)) {
                $res['loggingDetails'] = [];
                $n1 = 0;
                foreach ($this->loggingDetails as $item1) {
                    $res['loggingDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loggingProject) {
            $res['loggingProject'] = $this->loggingProject;
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
        if (isset($map['loggingDetails'])) {
            if (!empty($map['loggingDetails'])) {
                $model->loggingDetails = [];
                $n1 = 0;
                foreach ($map['loggingDetails'] as $item1) {
                    $model->loggingDetails[$n1] = loggingDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['loggingProject'])) {
            $model->loggingProject = $map['loggingProject'];
        }

        return $model;
    }
}
