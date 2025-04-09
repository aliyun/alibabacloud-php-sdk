<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponseBody\releaseNotes\releaseNote;

class releaseNotes extends Model
{
    /**
     * @var releaseNote[]
     */
    public $releaseNote;
    protected $_name = [
        'releaseNote' => 'ReleaseNote',
    ];

    public function validate()
    {
        if (\is_array($this->releaseNote)) {
            Model::validateArray($this->releaseNote);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->releaseNote) {
            if (\is_array($this->releaseNote)) {
                $res['ReleaseNote'] = [];
                $n1 = 0;
                foreach ($this->releaseNote as $item1) {
                    $res['ReleaseNote'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ReleaseNote'])) {
            if (!empty($map['ReleaseNote'])) {
                $model->releaseNote = [];
                $n1 = 0;
                foreach ($map['ReleaseNote'] as $item1) {
                    $model->releaseNote[$n1++] = releaseNote::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
