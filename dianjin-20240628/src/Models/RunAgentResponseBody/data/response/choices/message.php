<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data\response\choices;

use AlibabaCloud\Tea\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example assistant
     *
     * @var string
     */
    public $role;

    /**
     * @example assistant
     *
     * @var string
     */
    public $roleDisplayName;
    protected $_name = [
        'content' => 'content',
        'role' => 'role',
        'roleDisplayName' => 'roleDisplayName',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->roleDisplayName) {
            $res['roleDisplayName'] = $this->roleDisplayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return message
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['roleDisplayName'])) {
            $model->roleDisplayName = $map['roleDisplayName'];
        }

        return $model;
    }
}
