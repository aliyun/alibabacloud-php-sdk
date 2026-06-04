<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppWorkspaceDirectoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppWorkspaceDirectoryResponseBody\module\directoryList;

class module extends Model
{
    /**
     * @var string
     */
    public $currentTime;

    /**
     * @var directoryList[]
     */
    public $directoryList;
    protected $_name = [
        'currentTime' => 'CurrentTime',
        'directoryList' => 'DirectoryList',
    ];

    public function validate()
    {
        if (\is_array($this->directoryList)) {
            Model::validateArray($this->directoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentTime) {
            $res['CurrentTime'] = $this->currentTime;
        }

        if (null !== $this->directoryList) {
            if (\is_array($this->directoryList)) {
                $res['DirectoryList'] = [];
                $n1 = 0;
                foreach ($this->directoryList as $item1) {
                    $res['DirectoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CurrentTime'])) {
            $model->currentTime = $map['CurrentTime'];
        }

        if (isset($map['DirectoryList'])) {
            if (!empty($map['DirectoryList'])) {
                $model->directoryList = [];
                $n1 = 0;
                foreach ($map['DirectoryList'] as $item1) {
                    $model->directoryList[$n1] = directoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
