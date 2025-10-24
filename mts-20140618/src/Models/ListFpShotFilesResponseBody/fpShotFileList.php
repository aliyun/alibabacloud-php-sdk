<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponseBody\fpShotFileList\fpShotFile;

class fpShotFileList extends Model
{
    /**
     * @var fpShotFile[]
     */
    public $fpShotFile;
    protected $_name = [
        'fpShotFile' => 'FpShotFile',
    ];

    public function validate()
    {
        if (\is_array($this->fpShotFile)) {
            Model::validateArray($this->fpShotFile);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotFile) {
            if (\is_array($this->fpShotFile)) {
                $res['FpShotFile'] = [];
                $n1 = 0;
                foreach ($this->fpShotFile as $item1) {
                    $res['FpShotFile'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['FpShotFile'])) {
            if (!empty($map['FpShotFile'])) {
                $model->fpShotFile = [];
                $n1 = 0;
                foreach ($map['FpShotFile'] as $item1) {
                    $model->fpShotFile[$n1] = fpShotFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
