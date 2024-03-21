<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListApplicantsResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListApplicantsResponseBody\applicants\applicant;
use AlibabaCloud\Tea\Model;

class applicants extends Model
{
    /**
     * @var applicant[]
     */
    public $applicant;
    protected $_name = [
        'applicant' => 'Applicant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['Applicant'] = [];
            if (null !== $this->applicant && \is_array($this->applicant)) {
                $n = 0;
                foreach ($this->applicant as $item) {
                    $res['Applicant'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicants
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applicant'])) {
            if (!empty($map['Applicant'])) {
                $model->applicant = [];
                $n                = 0;
                foreach ($map['Applicant'] as $item) {
                    $model->applicant[$n++] = null !== $item ? applicant::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
